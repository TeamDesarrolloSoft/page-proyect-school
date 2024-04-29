const form = document.querySelector("#form");
const user = document.querySelector("#user")
const password = document.querySelector("#password")
const rol = document.querySelector("#rol")

form.addEventListener("submit", (e) =>{
    e.preventDefault()
    obteniendoDatosYEnvio(user,password,rol)

})

function obteniendoDatosYEnvio(user, pass, rol){
    const formDatos = new FormData();
    formDatos.append("usuario", user.value)
    formDatos.append("password", pass.value)
    formDatos.append("id_cargo", rol.value)

    fetch("./app/trigger/login.php?action=verifyCreacionRoles",{
        method: "POST",
        body: formDatos
    })
        .then(res => res.json())
        .then(console.log)
        .catch(err => console.log(err))
}
