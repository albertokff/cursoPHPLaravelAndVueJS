<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do Blade --}}

{{-- @dd($fornecedores) --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

{{-- Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless
<br> --}}

{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0['cnpj']])
        CNPJ: {{ $fornecedores[0['cnpj']] }}
        @empty($fornecedores[0['cnpj']])
            - Vazio
        @endempty
    @endisset    
@endisset --}}

{{-- @switch($fornecedores[1]['ddd'])
    @case ('11')
        São Paulo - SP
        @break
    @case ('32')
        Juiz de Fora - MG
        @break
    @case ('85')
        Fortaleza - CE
        @break
    @default
        Estado não identificado
@endswitch --}}

{{-- @for($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
@endfor --}}

{{-- @forelse($fornecedores as $indice => $fornecedor)
    Fornecedor: @{{ $fornecedor['nome'] }}

    $loop->iteration
    $loop->first
    $loop->last
    $loop->count

@empty
    Não existem fornecedores cadastrados!
@endforelse --}}