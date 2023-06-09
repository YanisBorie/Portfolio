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

function skillCard(card) {
    switch (card) {
        case "Realiser":
            if (document.getElementById('textRealiser').style.display == "none") {
                document.getElementById('textRealiser').style.display = 'block';
                document.getElementById('imgRealiser').style.display = "none";
            } else {
                document.getElementById('textRealiser').style.display = 'none';
                document.getElementById('imgRealiser').style.display = "block";
            }
            break;
        case "Optimiser":
            if (document.getElementById('textOptimiser').style.display == "none") {
                document.getElementById('textOptimiser').style.display = 'block';
                document.getElementById('imgOptimiser').style.display = "none";
            } else {
                document.getElementById('textOptimiser').style.display = 'none';
                document.getElementById('imgOptimiser').style.display = "block";
            }
            break;
        case "Administrer":
            if (document.getElementById('textAdministrer').style.display == "none") {
                document.getElementById('textAdministrer').style.display = 'block';
                document.getElementById('imgAdministrer').style.display = "none";
            } else {
                document.getElementById('textAdministrer').style.display = 'none';
                document.getElementById('imgAdministrer').style.display = "block";
            }
            break;
        case "Gerer":
            if (document.getElementById('textGerer').style.display == "none") {
                document.getElementById('textGerer').style.display = 'block';
                document.getElementById('imgGerer').style.display = "none";
            } else {
                document.getElementById('textGerer').style.display = 'none';
                document.getElementById('imgGerer').style.display = "block";
            }
            break;
        case "Conduire":
            if (document.getElementById('textConduire').style.display == "none") {
                document.getElementById('textConduire').style.display = 'block';
                document.getElementById('imgConduire').style.display = "none";
            } else {
                document.getElementById('textConduire').style.display = 'none';
                document.getElementById('imgConduire').style.display = "block";
            }
            break;
        case "Collaborer":
            if (document.getElementById('textCollaborer').style.display == "none") {
                document.getElementById('textCollaborer').style.display = 'block';
                document.getElementById('imgCollaborer').style.display = "none";
            } else {
                document.getElementById('textCollaborer').style.display = 'none';
                document.getElementById('imgCollaborer').style.display = "block";
            }
            break;
    }
}