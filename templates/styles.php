
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    hgroup,
    article {
        text-align: center;
        border-radius: 1rem;
        filter: drop-shadow(1px 1px 36px black);
    }

    section {
        display: flex;
        justify-content: space-between;
    }

    img {
        border-radius: 1rem;
        text-align: center;
        padding: 0.5rem;
        transition: filter 0.3s, transform 0.9s;
    }
    
    @media (prefers-color-scheme: light) {
        body {
            background-color: #ffffff;
            color: #000000;
        }
        img:hover {
            transform: 1s;
            filter: drop-shadow(6px 6px 16px black);
            transform: scale(1.05) rotate(5deg);
            
        }
        header,
        footer {
            background-color: #f0f0f0;
        }

        a {
            color: #007bff;
        }
    }

    /* Estilos específicos para el modo oscuro */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #121212;
            color: #ffffff;
        }
        img:hover {
            transform: 1s;
            filter: drop-shadow(6px 6px 16px white);
            transform: scale(0.8) rotate(720deg);
        }

        header,
        footer {
            background-color: #1e1e1e;
        }

        a {
            color: #66b2ff;
        }
    }
</style>