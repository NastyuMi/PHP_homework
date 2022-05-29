const elem = document.getElementById('elem');
let move = 0;

elem.addEventListener('click',ev => {
    if(ev.target.className = 'cell')
    {
        if(ev.target.innerHTML !== 'X' && ev.target.innerHTML !== 'O') {
            if (move % 2 === 0) {
                ev.target.innerHTML = 'X';
            }
            else if (move % 2 !== 0) {
                ev.target.innerHTML = 'O';
            }
            move++;
            check();
        }

    }
})

const check = () => {
    const cells = document.getElementsByClassName('cell')
    const arr = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];
    let result;

    for (i=0; i<arr.length; i++)
    {
        if ( cells[arr[i][0]].innerHTML === 'X' && cells[arr[i][1]].innerHTML === 'X' && cells[arr[i][2]].innerHTML === 'X'){
            result = "X";
        }
        else if ( cells[arr[i][0]].innerHTML === 'O' && cells[arr[i][1]].innerHTML === 'O' && cells[arr[i][2]].innerHTML === 'O'){
            result = "O";
        }
        alert("Winner "+result);
        window.location.reload();
    }

}