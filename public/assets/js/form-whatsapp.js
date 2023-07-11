
document.querySelector("#submit2").addEventListener("click", e => {
    e.preventDefault();

//INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
let telefono = "51913069000";


let name = document.querySelector("#name").value;
let dni = document.querySelector("#dni").value;
let id = document.querySelector("#id").value;
let resp = document.querySelector("#respuesta");

resp.classList.remove("fail");
resp.classList.remove("send");

let url = `https://api.whatsapp.com/send?phone=${telefono}&text=
		*QUIERO TENER INFORMACIÓN*%0A%0A
		
		*Nombre Completo:*%0A
		${name}%0A
		*Correo Electrónico:*%0A
		${dni}%0A
		*Teléfono*%0A
		${id}`;

if (dni === "" || id === "") {
    resp.classList.add("fail");
    resp.innerHTML = `Faltan algunos datos,${name}`;
    return false;
}
resp.classList.remove("fail");
resp.classList.add("send");
resp.innerHTML = `Se ha enviado tus datos,${name}`;

window.open(url);
});
