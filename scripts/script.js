function confirmarHues(pos)
{
    if(confirm("¿Desea borrar el Huesped?"))
        location.href="eliminar_huesped.php?id="+pos;
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
function confirmarCon(pos)
{
    if(confirm("¿Desea borrar el Consumo?"))
        location.href="eliminar_consumo.php?id="+pos;
    else
        return false;
}