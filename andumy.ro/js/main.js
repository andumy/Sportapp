var triangles = [];
var totalTriangles = 250;
for(var i=0;i<totalTriangles;i++)
{
    triangles[i] = Math.floor(Math.random() * 284);
}

var section = [
    [272, 273, 274, 275, 257, 258, 259, 260, 261, 262, 263],
    [8, 7, 1, 12, 13 ,14 ,15, 17, 18,19 ,20]
];
var sectionWidth = section[0].length;
var sectionHeight = section.length;

var flag = false;
var noScroll = false;

var anchors = ["graphics", "branding", "aboutme", "webdevelopment", "oop" ];
var active = 2;

function slide(){
    document.getElementById("portrait").style="margin-left:0px";
    document.getElementById("headline").style="margin-left:0vw";
}

function initialDisplay(){
    for(var i=0;i<totalTriangles;i++)
    {
        if(!document.getElementById("triangle"+triangles[i]).classList.contains("grayTriangle"))
        {
            document.getElementById("triangle"+triangles[i]).classList.add("grayTriangle");
        }
        
    }
    triangleChange();
}

function triangleChange(){  


    document.getElementById("triangle"+triangles[totalTriangles-1]).classList.remove("grayTriangle"); 
     totalTriangles-=1;

    if(totalTriangles>0)
    {
        setTimeout(triangleChange,20);
    }
    else
    {
        setTimeout(glitch,100,0);
    } 
}

function glitch(index){

    if(index<sectionWidth && flag == false)
    {
        for(var i = 0; i < sectionHeight ; i++)
        {
            document.getElementById("triangle"+section[i][index]).classList.add("grayTriangle");
        }
        setTimeout(glitch,25,index+1);
    }
    else
    {
        flag = true;
    }    
    if(flag == true){

        for(var i = 0; i < sectionHeight ; i++)
        {
            document.getElementById("triangle"+section[i][0]).classList.remove("grayTriangle");
        }
        
        

        for(var i=0;i<sectionHeight;i++)
        {
            for(var j=0;j<sectionWidth-1;j++)
            {
                section[i][j] = section[i][j+1];
                section[i][j] = section[i][j+1];
            }
        }

        for(var i = 0; i < sectionHeight ; i++)
        {
            section[i][sectionWidth-1] = section[i][sectionWidth-2]+1; 
            if(section[i][sectionWidth-1] == 285) section[i][sectionWidth-1] = 0;
        }
       
             
        for(var i=0;i<sectionHeight;i++)
        {
            for(var j=0;j<sectionWidth;j++)
            {
                if(!document.getElementById("triangle"+section[i][j]).classList.contains("grayTriangle"))
                {
                    document.getElementById("triangle"+section[i][j]).classList.add("grayTriangle");
                }
            }
        }
        setTimeout(glitch,25,index);
    }
}


function activate(clicked,i = active){

    if(i==clicked)
    {
        active = clicked;
        return;
    }
    else if(i<clicked)
    {
        slideSection(i,-1);
        slideSection(i+1,0);

        if(anchors[i] == "aboutme" )
        {
            document.getElementById("logo").style="fill:#eeeeee";
        }
        if(anchors[i+1] == "aboutme" )
        {
            document.getElementById("logo").style="fill:#00ff00";
        }

        document.getElementById("link"+(i+1)).style="color:#00ff00";
        document.getElementById("link"+i).style="color:#eeeeee";

        setTimeout(function(){
            activate(clicked,i + 1);
        },1000);
    }
    else if(i>clicked)
    {
        slideSection(i,1);
        slideSection(i-1,0);

        if(anchors[i] == "aboutme" )
        {
            document.getElementById("logo").style="fill:#eeeeee";
        }
        if(anchors[i-1] == "aboutme" )
        {
            document.getElementById("logo").style="fill:#00ff00";
        }

        document.getElementById("link"+(i-1)).style="color:#00ff00";
        document.getElementById("link"+i).style="color:#eeeeee";

        setTimeout(function(){
            activate(clicked,i - 1);
        },1000);
    } 

}


function slideSection(index,direction){
    dist = direction*100;
    document.getElementById(anchors[index]).style = "margin-left:"+dist+"vw";
}


$(document).on('mousewheel', function(e) {
    var delta = e.originalEvent.wheelDelta;
    if(noScroll)
    {
        return true;
    }
    if(delta>0)
    {
       if(active!=0)
       {
            if(anchors[active] == "aboutme" )
            {
                document.getElementById("logo").style="fill:#eeeeee";
            }
            if(anchors[active-1] == "aboutme" )
            {
                document.getElementById("logo").style="fill:#00ff00";
            }
            document.getElementById("link"+(active-1)).style="color:#00ff00";
            document.getElementById("link"+active).style="color:#eeeeee";

            slideSection(active-1,0);
            slideSection(active,1);
            active-=1;
            noScroll = true;
       }
    }
    else
    {
        if(active!=anchors.length-1)
        {
            if(anchors[active] == "aboutme" )
            {
                document.getElementById("logo").style="fill:#eeeeee";
            }
            if(anchors[active+1] == "aboutme" )
            {
                document.getElementById("logo").style="fill:#00ff00";
            }
            document.getElementById("link"+(active+1)).style="color:#00ff00";
            document.getElementById("link"+active).style="color:#eeeeee";

            slideSection(active+1,0);
            slideSection(active,-1);
            active+=1;
            noScroll = true;
        }
    }
    setTimeout(function(){noScroll = false;}, 1500);
});

