//L'application requiert l'utilisation du module Express.
//La variable express nous permettra d'utiliser les fonctionnalités du module Express.  
var express = require('express');

// Nous définissons ici les paramètres du serveur.
var hostname = 'localhost'; 
var port = 8888; 

var app = express(); 

var myRouter = express.Router(); 
 
// Je vous rappelle notre route (/piscines).  
myRouter.route('www.cesi-bde.com/info')
.get(function(req,res){ 
	  res.json({message : "test", name : req.query.name, methode : req.method});
})
//show map of a fixed position

app.use(myRouter);
 
// Démarrer le serveur 
app.listen(port, hostname, function(){
	console.log("Mon serveur fonctionne sur http://"+ hostname +":"+port+"\n"); 
});