const express = require('express');

var usersController=require('../src/users/usersController');

 const router =express.Router();

  //router.route('/user/login').post(usersController.loginUsersControllerFn);

  router.route('/user/create').post(usersController.createUsersControllerFn);

  module.exports=router;