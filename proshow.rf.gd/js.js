var Command = new XMLHttpRequest();
Command.open('GET','https://getbootstrap.com/docs/4.4/examples/blog/index.html');
Command.onload = function() {
    var Data = Command.responseText;
    
};

Command.send();