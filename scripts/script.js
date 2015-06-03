function confirmarHues(numero, id)
{
    if(confirm("¿Desea borrar el Huesped?"))
        location.href="eliminar_huesped.php?numero="+numero+"&id="+id;
    else
        return false;
}
function confirmarRes(pos)
{
    if(confirm("¿Desea borrar la Reserva?"))
        location.href="eliminar_reserva.php?id="+pos;
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