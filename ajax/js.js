var Command = new XMLHttpRequest();
Command.open('GET','https://www.ucukltd.com/truck/body-panels/cabin-component-parts/cabin-wings-rear-wings/sc59-wing-strap');
Command.onload = function() {
    var Data = JSON.parse(Command.responseText);
    console.log(Data[0]);
};

Command.send();