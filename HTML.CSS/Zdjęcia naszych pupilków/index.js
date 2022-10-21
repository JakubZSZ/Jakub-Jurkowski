function over(id, img) 
{			
    document.getElementById(id).src = img;			
}

function clicked(id, img)
{			
    document.getElementById('set').src = img;
    out(id, img);			
}

function out(id, img)
{
    document.getElementById(id).src = img;
}