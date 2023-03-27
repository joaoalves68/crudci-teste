function goDelete(id, db)
{
    if(confirm('Deseja realmente excluir esse registro?')){
        window.location.href = db+'/delete/'+id
    }
}