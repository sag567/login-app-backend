const express = require("express");
require('dotenv').config();
const mongoose = require("mongoose");
const bodyParser = require("body-parser");
const ejs = require("ejs");
var cors = require("cors");
var key = "123456789dsdfsdfdssdfrs";
const bcrypt = require("bcrypt");
const saltRounds = 10;
var unsecurePlainTextPassword = "password";
var md5 = require("md5");
var validator = require("validator");
var encryptor = require("simple-encryptor")(key);
var router = express.Router();
const multer = require('multer');
const nodemailer = require('nodemailer');
mongoose.set("strictQuery", false);
const app = express();
const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, 'uploads/');
  },
  filename: (req, file, cb) => {
    cb(null, Date.now() + '-' + file.originalname);
  },
});
const upload = multer({ storage });
app.set("view engine", "ejs");
app.use(bodyParser.json());
const users = mongoose.Schema({
  firstname: {
    type: String,

    required: true,
  },

  lastname: {
    type: String,

    required: true,
  },
  email: {
    type: String,

    required: true,

    unique: true,
  },

  password: {

    type: String,

    required: true,

    unique: true,

  },


});

//set connection
const userModel = mongoose.model("users", users);
app.get("/users/signup", (req, res) => {
  res.render("register");
});

app.get("/users/login", (req, res) => {
  res.render("login");
});

app.post("/users/signup", function (req, res) {
  const newUser = new userModel({
    firstname: req.body.firstname,
    lastname: req.body.lastname,
    email: req.body.email,
    password: bcrypt.hashSync(req.body.password, 8),
    //avatar: url + '/public/' + req.file.filename

  });


  if (!req.body.firstname) {
    res.status(400).send({ msg: "First Name must not be empty" });
    return;
  } else if (!req.body.lastname) {
    res.status(400).send({ msg: "Last Name must not be empty" });
    return;
  } else if (!req.body.email) {
    res.status(400).send({ msg: "Email must not be empty" });

    return;
  } else if (!req.body.password) {
    res.status(400).send({ msg: "Password must not be empty" });

    return;
  }

  newUser
    .save()
    .then(() => {
      res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
      //res.send("Data Saved sucessfully");
      res.json({ code: 200, msg: "Data Saved Suceessfully" });
    })
    .catch((err) => {
      res.status(500).json({ code: 500, msg: "Data not saved" });
    });
});

app.post("/users/login", async (req, res) => {
  const email = req.body.email;
  const password = req.body.password;
  const foundUser = await userModel.findOne({ email: email });

  if (!email) {
    res.json({ code: 401, msg: "Email must not empty" });
  }

    console.log(foundUser.password);

  //    console.log(isMatch);
  // if (!isMatch)
  //   return res.status(400).json({
  //     message: "Incorrect Password !"
  //   });
  if (foundUser && bcrypt.compare(password, foundUser.password)) {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
    res.json({ code: 200, msg: "Users Validated Sucessfully" });
  } else {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
    res.json({ code: 401, msg: "User Not Validated" });
  }
});

app.get("/users/list", async (req, res) => {
  const userdata = await userModel.find();
  if (!userdata) {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
    res.json({ code: 200, msg: "No Users found" });
  } else {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
    res.json(userdata);
  }

});

app.post('/users/upload', upload.single('file'), (req, res) => {
  if (!req.file) {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
    return res.status(400).json({ error: 'No file uploaded' });
  }
  res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
  res.json({ message: 'File uploaded successfully', filename: req.file.filename });
});
app.get('/users/downloadfile/:filename', (req, res) => {
  const filePath = __dirname + "/uploads/" + req.params.filename;
  console.log(req.params.filename);
  res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
  res.download(
    filePath,
    "imagetest.png",
    (err) => {jf
      if (err) {
        res.send({
          error: err,
          msg: "Problem downloading the file"
        })
      }
    });

});
app.post("/users/add", function (req, res) {
  const newUser = new userModel({
    firstname: req.body.firstname,
    lastname: req.body.lastname,
    email: req.body.email,
    password: bcrypt.hashSync(req.body.password, 8),

    // password: bcrypt.hashSync(req.body.password, 8),
    //avatar: url + '/public/' + req.file.filename

  });

  if (!req.body.firstname) {
    res.status(400).send({ msg: "First Name must not be empty" });
    return;
  } else if (!req.body.lastname) {
    res.status(400).send({ msg: "Last Name must not be empty" });
    return;
  } else if (!req.body.email) {
    res.status(400).send({ msg: "Email must not be empty" });

    return;
  } else if (!req.body.password) {
    res.status(400).send({ msg: "password must not be empty" });

    return;
  }

  newUser
    .save()
    .then(() => {
      res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
      //res.send("Data Saved sucessfully");
      res.json({ code: 200, msg: "Data Saved Suceessfully" });
    })
    .catch((err) => {
      res.status(500).json({ code: 500, msg: "Data not saved" });
    });
});


app.put('/user/update/:id', (req, res) => {
  const newUser = new userModel({
    _id: req.params.id,
    firstname: req.body.firstname,
    lastname: req.body.lastname,
    email: req.body.email,

  });

  userModel.updateOne({ _id: req.params.id }, newUser).then(
    () => {

      res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");

      res.status(201).json({
        message: 'User updated successfully!'
      });


    }
  ).catch(
    (error) => {
      res.status(400).json({
        error: error
      });
    }
  );
});

app.get("/user/show/:id", async (req, res) => {
  const userdata = await userModel.findOne({ _id: req.params.id });
  if (!userdata) {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
    res.json({ code: 200, msg: "No Users found" });
  } else {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
    res.json(userdata);
  }

});

app.get("/user/find/:name", async (req, res) => {
  const userdata = await userModel.findOne({ firstname: req.params.name });
  if (!userdata) {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
    res.json({ code: 200, msg: "No Users found" });
  } else {
    res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");

    res.send({ "status": true, "data": userdata });

  }

});

app.post('/forgot', (req, res) => {
  const { email } = req.body;
  userModel.findOne({ email }, (err, user) => {
    if (err || !user) {
      return res.status(400).json({ error: 'User not found' });
    }
    const token = randomstring.generate();
    const expires = Date.now() + 3600000;
    user.resetPasswordToken = token;
    user.resetPasswordExpires = expires;
    user.save((err) => {
      if (err) {
        return res.status(500).json({ error: 'Internal server error' });
      }
     
      const mailOptions = {
        from: 'sagarghosh209@gmail.com',
        to: email,
        subject: 'Password Reset',
        text: `You are receiving this email because you requested to reset your password. Please click the following link within one hour:\n
` +
          `reset/${token}`
      };

      transporter.sendMail(mailOptions, (err, info) => {
        if (err) {
          return res.status(500).json({ error: 'Error sending email' });
        }
        res.status(200).json({ message: 'Email sent' });
      });
    });
  });
});

app.post('/users/send-email', (req, res) => {
  const name = req.body.name;
  const email = req.body.email;
  const message = req.body.message;
  const transporter = nodemailer.createTransport({
    host: "sandbox.smtp.mailtrap.io",
    port: 2525,
    auth: {
      user: "4ebcf516fb05ae",
      pass: "2b297884913cd"
    }
  });
  const mailOptions = {
    from: 'sagarghosh209@gmail.com',
    to: email,
    subject: 'New Contact Form Submission',
    text: `
      Name: ${name}
      Email: ${email}
      Message: ${message}
    `
  };
  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
       console.log(error);
      res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
      res.json({ code: 500, msg: "Email not sent" });

    } else {
      res.set("Access-Control-Allow-Origin", "https://profound-caramel-7936bf.netlify.app");
      res.status(200).json({ message: 'Email sent successfully' });
    }
  });
});

app.listen(process.env.PORT||2000, function check(err) {
  if (err) console.log("error");
  else console.log("working");
});
//connect db
mongoose
  .connect(process.env.MONGODB_URI, {
    useNewUrlParser: true,
    useUnifiedTopology: true,
  })
  .then((res) => {
    console.log("Database connected");
  })
  .catch((error) => {
    console.log(error);
  });
app.use(express.json());
app.use(cors());
