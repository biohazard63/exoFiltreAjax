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
    var gender = document.getElementById('gender').value;
    var sort = document.getElementById('sort').value;
    var birthStart = document.getElementById('birthStart').value;
    var birthEnd = document.getElementById('birthEnd').value;
    var search = document.getElementById('search').value;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'action.php?house=' + house + '&gender=' + gender + '&sort=' + sort + '&birthStart=' + birthStart + '&birthEnd=' + birthEnd + '&search=' + search, true);
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById('character-cards').innerHTML = this.responseText;
        }
    }
    xhr.send();
});