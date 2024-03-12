document.getElementById('showCards').addEventListener('click', function() {
   console.log('clicked')
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'action.php', true);
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('character-cards').innerHTML = this.responseText;
        }
    }
    xhr.send();
});

document.getElementById('filterForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var house = document.getElementById('house').value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'action.php?house=' + house, true);
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('character-cards').innerHTML = this.responseText;
        }
    }
    xhr.send();
});