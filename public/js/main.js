let btn = document.querySelector('.btn')
let spinhide = document.querySelector('.spinhide')
let body = document.querySelector('body')
btn.addEventListener('click', function (e) {
    const data = {
        query: 'qwery',
        number: 8787
    }

    // spinhide.classList.remove('hide')
    spinhide.style.display = 'block'
    btn.disabled = true
    btn.textContent = 'enter...'

    requstServer(data)

})

// spinhide.style.display = 'none'

async function requstServer(we) {
    let res = await fetch('./add.php', {
        method: 'post',
        headers: {
            'Content-type': 'application/json'
        },
        body: JSON.stringify(we)



    })
    let result = await res.json()
    console.log(result);

    spinhide.style.display = 'none'
    btn.textContent = 'enter'
    btn.disabled = false

    //  spinhide.classList.remove('show')
    // spinhide.classList.add('hide')

}

