let btn = document.querySelector('.btn')
let spinhide = document.querySelector('.spinhide')
let body = document.querySelector('body')
btn.addEventListener('click', function (e) {
    // const data = {
    //     query: 'qwery',
    //     number: 8787
    // }

    const data = {
        number:document.querySelector('.input').value
    }
    console.log(data);
    

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

    const{data}=result
    console.log(data);
    

    spinhide.style.display = 'none'
    btn.textContent = 'enter'
    btn.disabled = false

    body.insertAdjacentHTML('beforeend',`
        <div>
            <p class="text-success fs-2 fw-bold">${result.msg}</p>
            ${getUsers(data)}
        </div>
        `)

    //  spinhide.classList.remove('show')
    // spinhide.classList.add('hide')

}

// function getUsers(y){
//     for (const el of y) {` 
//         <p>${el.name}</p>
//         `
//     }
// }

// function getUsers(params) {
//     params.forEach(el => {
//         `
//         <p>${el.name}</p>
//         `
//     });
// }

function getUsers(params) {
    return params
        .map((el) => `<ol>
    <li>имя ${el.name}</li>
    <li>е маил ${el.email}</li>
    </ol>
    `).join('')
}