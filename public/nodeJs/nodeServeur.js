// We use the module express
var express = require('express');

// We define parameters of the server
var hostname = 'localhost'; 
var port = 8888; 

var app = express(); 

var myRouter = express.Router(); 
 
// We prepare the road to the files  
myRouter.route('www.cesi-bde.com/info')
.get(function(req,res){ 
	  res.json({message : "test", name : req.query.name, methode : req.method});
})

app.use(myRouter);
 
// We start the server and we send a message to the terminal
app.listen(port, hostname, function(){
	console.log("Mon serveur fonctionne sur http://"+ hostname +":"+port+"\n"); 
});