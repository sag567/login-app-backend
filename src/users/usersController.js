var userService=require('./userService');

var createUsersControllerFn = async(req,res) =>{

try{

//coconsolensole.log(req.body);

var status= await userService.createUserDBService(req.body);

//console.log(status);

 if(status){

 res.send({'status':true,'message':'users created sucessfully'});


 }

  else{

    res.send({'status':false,'message':'Error creating User'});


  }

}

 catch(err){

     console.log(err);


 }


}

  module.exports ={createUsersControllerFn};

