/*page*/
@font-face{
    font-family: "Avenir Next LT Pro";
    src:url(AvenirNextLTPro-Demi.otf);
}

*{
    font-family: Avenir Next LT Pro;
}
/*en tête*/
header{
    background-attachment: fixed;

}
.logo, img{
    width:300px;
    height:100px;
    margin: 10px 0px 0px 10px;
}

header h1{

    font-weight:bold;
    color: rgba(120, 0, 120, 0.6);
    font-size: 1.8em;
    position:absolute;
    top:40px;
    right:445px;
}

header .connexion a{
	font-size: 1.2em;
    position:absolute;
    top:50px;
    right:180px;
    text-decoration: none;
    font-weight: bold;
    height:2em;
    width: 5em;
    border-radius:4em;
    background-color:rgba(120, 0, 120, 0.2);
    text-align: center;
    padding-top:0.8em;
    color:white;

}


/*barre de navigation*/
header nav{
    position: relative;
    background-color: rgba(120, 0, 120, 0.5);
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    margin-top: 30px;
}


nav a{
    font-size: 1.2em;
    color: white;
    font-weight: bold;
    text-decoration: none;
}

nav ul{
    list-style-type: none;
    display: flex;
    justify-content: space-around;
    margin-left: 50px;
    margin-right:50px;
    padding: 7px;
    
}


nav .nav-item{
    margin-right: 80px;
    transition:transform .3s ease;
}

nav .nav-item:hover{
    transform: scale(1.4);
}


/*barre de recherche*/ 
header .search input{
    border-radius: 100px;
    border: grey solid 1px;
    font-size: 1em;
    outline:none;
    text-align: center;
    margin-left:1040px;
    margin-top: 5px;
}

.effet{
    display:block;
    margin-left:auto;
    margin-right:auto;
    text-align: center;

}

.effet img {
    border-radius:3px;
    width:50px;
    height:50px;       
    vertical-align:middle;
    transition:transform .3s ease;
}


footer{
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    background-color:rgba(120,0,120,0.5);
    color:white;
    margin-top: 500px;
}
 
.effet img:hover {
    border-radius:50px;
    transform: scale(1.4);
}



