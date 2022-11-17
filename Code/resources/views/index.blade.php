<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator with Laravel</title>
</head>
<body>
    <header>
        <h1>Calculator</h1>
    </header>
    <form action="{{ route('Calculation') }}" method="post">
        @csrf
        <main>
            <div>
                <label for="first__number">Primeiro Número</label>
                <input type="number" name="first__number" placeholder=" ">
            </div>
            <div>
                <select name="operator">
                    <option selected disabled value="">Operador</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>
            </div>
            <div>
                <label for="second__number">Segundo Número</label>
                <input type="number" name="second__number" placeholder=" "></div>
        </main>
        <div>
            <button type="submit">Calcular</button>
            <button type="reset">Limpar</button>
        </div>
        @if(session('message'))
        <div id="result">{{ session('message') }}</div>
        @endif
    </form>
</body>
</html>