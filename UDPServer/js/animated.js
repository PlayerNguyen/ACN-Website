function addAnimated(id, nameAnimated)
{
    document.getElementById(id).classList.add("animated");
    document.getElementById(id).classList.add(nameAnimated);
}

function removeAnimated(id, nameAnimated)
{
    document.getElementById(id).classList.remove("animated");
    document.getElementById(id).classList.add(nameAnimated);
}