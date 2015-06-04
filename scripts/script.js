function confirmarHues(numero, id)
{
    if(confirm("¿Desea borrar el Huesped?"))
        location.href="eliminar_huesped.php?numero="+numero+"&id="+id;
    else
        return false;
}
function confirmarRes(numero,fecha,nombre,id,dias)
{
    if(confirm("¿Desea borrar la Reserva?"))
        location.href="eliminar_reserva.php?numero="+numero+"&fecha="+fecha+"&nombre="+nombre+"&id="+id+"&dias="+dias;
    else
        return false;
}
function confirmarCon(numero, fecha, producto, valor)
{
    if(confirm("¿Desea borrar el Consumo?"))
        location.href="eliminar_consumo.php?numero="+numero+"&fecha="+fecha+"&producto="+producto+"&valor="+valor;
    else
        return false;
}
function confirmarCheckOut(numero){
    if(confirm("¿Desea realizar CheckOut?"))
        location.href="checkout.php?numero="+numero;
    else
        return false;
}