window.onload = function(){
    let url = window.location.href.split('/').slice(-1)[0];
    if (url == 'index.html' || url == 'index.html#') {
        document.title = "Webprogramming (LIX019P05) -Index";
        createArticle("col-md-12");
        changeListHref();
        changeNavItemColor("red");
        createTable(createSchedule(), document.getElementsByClassName('row')[0]);

    }else{
        document.title = "Webprogramming(LIX019P05) -Second";
        addSideBar('container');
        var container = document.getElementsByClassName('container')[0];
        container.style.display = 'flex';
        createTable(createSchedule(), document.getElementsByClassName('col-md-4')[0]);
    }
};


function createArticle(parentClass){
    /**
     * Creates an article that will sit in the given parameter
     * */
    var article = document.createElement("article");
    var h1 = document.createElement("h1");
    h1.innerHTML = "This is my second header";
    var p = document.createElement("p");
    p.innerHTML = "Lorem ipsum really long text lorem lorem lorem";
    article.appendChild(h1);
    article.appendChild(p);
    var container = document.getElementsByClassName(parentClass)[0];
    container.appendChild(article);
}

function changeListHref(){
    /**
     * Changes the url of the third link to google.com
     * */
    var list = document.getElementById("links");
    var listItem = list.getElementsByTagName("li")[2];
    var a = listItem.getElementsByTagName("a")[0];
    a.href = "https://google.com";
    a.target = "_blank";
}

function changeNavItemColor(color){
    /**
     * Changes the colour of elements with the class "nav-item"
     * */
    var navItems = document.getElementsByClassName("nav-item");
    for (var i = 0; i < navItems.length; i++){
        navItems[i].style.color = color;
    }
}

function createSchedule(){
    /**
     * Creates and returns an object with a scedule
     * */
    var scedule = {
        week1 : "Assignment 1",
        week2 : "No lecture",
        week3 : "Assignment 2",
        week4 : "-",
        week5 : "Assignment 3",
        week6 : "-",
        week7 : "Guest Lecture"
    }
    return scedule
}

function createTable(data, container){
    /**
     * Places a table inside the given container parameter filled with
     * the data given in the parameter.
     * */
    //create all objects
    var table = document.createElement('table');
    var thead = document.createElement("thead");
    var tr = document.createElement("tr");
    var weken = document.createElement("th");
    weken.innerHTML = "Weken";
    var bezigheden = document.createElement('th');
    bezigheden.innerHTML = 'Bezigheden';
    var tbody = document.createElement('tbody');

    //appending to childs
    table.appendChild(thead);
    table.appendChild(tbody);
    thead.appendChild(tr);
    tr.appendChild(weken);
    weken.style.padding = '5px';
    tr.appendChild(bezigheden);
    bezigheden.style.padding = '5px';

    //inserting the data
    for(week in data){
        var tr = document.createElement('tr');
        var td = document.createElement('td');
        td.innerHTML = week;
        tr.appendChild(td);
        var td = document.createElement('td');
        td.innerHTML = data[week];
        tr.appendChild(td);
        tbody.appendChild(tr);
    }

    //finally appending to the container
    container.appendChild(table);

    //styling the table
    var tds = document.getElementsByTagName('td');

    for(var i = 0; i < tds.length; i++){
        tds.item(i).style.padding = '5px';
    }
    table.style.margin = '10px';
}

function addSideBar(container){
    /**
     * Adds a sidebar to the webpage
     * */
    var main_col = document.getElementsByClassName('col-md-12')[0];
    main_col.classList.add('col-md-8');
    main_col.classList.remove('col-md-12');

    var side_bar = document.createElement('div');
    side_bar.classList.add('col-md-4');
    side_bar.style.padding = '25px 0px 0px 0px';
    var heading = document.createElement('h1');
    heading.innerHTML = 'Sidebar';
    side_bar.appendChild(heading);

    document.getElementsByClassName(container)[0].appendChild(side_bar);
}

