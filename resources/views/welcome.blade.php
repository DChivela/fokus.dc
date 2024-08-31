@extends('layouts.main')

@section ('title', 'FOCUS DC')

@section('content')

<div class="about-section">
    <div class="centered-section">
        <!-- <a href="/" class="navbar-brand">
            <img src="/img/LOGO06.PNG" alt="Focus DC">
        </a> -->
        <h1 class="title">FOCUS DC</h1>
        <div class="typing-container">
            <span id="typed-words"></span>
        </div>
        <div class="contact-info">
            <p><ion-icon name="location-outline"></ion-icon> Angola -> Huíla - Lubango</p>
            <p><ion-icon name="call-outline"></ion-icon> +244 947 449 844</p>
            <p><ion-icon name="call-outline"></ion-icon> +244 952 388 841</p>
            <p><ion-icon name="mail-outline"></ion-icon> services@focusdc.com</p>
        </div>

    </div>
</div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const words = ["Desenvolvimento Web", "Ferramentas Tecnologicas", "Prestação de Serviços"]; // Palavras que serão escritas
        let currentWordIndex = 0;
        let currentLetterIndex = 0;
        const typedWordsElement = document.getElementById('typed-words');

        function type() {
            if (currentLetterIndex < words[currentWordIndex].length) {
                typedWordsElement.textContent += words[currentWordIndex].charAt(currentLetterIndex);
                currentLetterIndex++;
                setTimeout(type, 100); // Velocidade de digitação
            } else {
                setTimeout(erase, 1500); // Pausa antes de apagar
            }
        }

        function erase() {
            if (currentLetterIndex > 0) {
                typedWordsElement.textContent = typedWordsElement.textContent.slice(0, -1);
                currentLetterIndex--;
                setTimeout(erase, 50); // Velocidade para apagar
            } else {
                currentWordIndex = (currentWordIndex + 1) % words.length;
                setTimeout(type, 500); // Pausa antes de digitar a próxima palavra
            }
        }

        type();
    });
</script>