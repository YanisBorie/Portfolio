function popup(popup) {
    document.getElementById('popupbackground').style.animation = '1.25s fondu both';
    document.getElementById('popupbackground').style.display = 'flex';
    switch (popup) {
        case "Laya":
            document.getElementById('popupLaya').style.display = 'block';
            break;
        case "BUT":
            document.getElementById('popupBUT').style.display = 'block';
            break;
        case "Snake":
            document.getElementById('popupSnake').style.display = 'block';
            break;
        case "Caseus":
            document.getElementById('popupCaseus').style.display = 'block';
            break;
        case "Pendu":
            document.getElementById('popupPendu').style.display = 'block';
            break;
        case "ShoppingList":
            document.getElementById('popupShoppingList').style.display = 'block';
            break;
    }
}

function popdown() {
    document.getElementById('popupLaya').style.display = 'none';
    document.getElementById('popupBUT').style.display = 'none';
    document.getElementById('popupSnake').style.display = 'none';
    document.getElementById('popupCaseus').style.display = 'none';
    document.getElementById('popupPendu').style.display = 'none';
    document.getElementById('popupShoppingList').style.display = 'none';
    document.getElementById('popupbackground').style.display = 'none';

}