<h3>Fornecedor</h3>



Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>

{{-- @if ( !($fornecedores[0]['status'] == 'S' ) )
    Fornecedor inativo
@endif
<br>
@unless ($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless
<br> --}}


{{--Comentário ae--}}



{{-- @if (count($fornecedores) > 0 && count($fornecedores) <10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores )> 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

