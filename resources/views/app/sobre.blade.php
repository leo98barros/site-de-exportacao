@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 mt-3">
                <h2>
                    Quem somos?
                </h2>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-2">
                <img class="rounded-circle mb-4" src="{{ asset('img/quem-somos/QS-1.jpg') }}" alt="Generic placeholder image" width="200" height="200">
                <h5>João Victor</h5>
            </div>
            <div class="col-2">
                <img class="rounded-circle mb-4" src="{{ asset('img/quem-somos/QS-2.jpg') }}" alt="Generic placeholder image" width="200" height="200">
                <h5>Eduardo Mercury</h5>
            </div>
            <div class="col-2">
                <img class="rounded-circle mb-4" src="{{ asset('img/quem-somos/QS-3.jpg') }}" alt="Generic placeholder image" width="200" height="200">
                <h5>Eduardo Gabriel</h5>
            </div>
            <div class="col-2">
                <img class="rounded-circle mb-4" src="{{ asset('img/quem-somos/QS-4.jpg') }}" alt="Generic placeholder image" width="200" height="200">
                <h5>Kayo Marques</h5>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-5">
                <h2>
                    Missão
                </h2>
    
                <p>
                    Inspirar e transformar espaços através da arte, oferecendo quadros únicos e personalizados que expressem a
                    individualidade e estilo de nossos clientes.
                </p>
            </div>
            <div class="col-5">
                <h2>
                    Visão
                </h2>
    
                <p>
                    Ser reconhecida como a principal destino para quem busca quadros que vão além de decorativos, mas que também
                    contam histórias e despertam emoções, tornando-se uma referência de excelência em arte e design.
                </p>
            </div>
            <div class="col-10">
                <h2>
                    Valores
                </h2>
    
                <p>
                <ol>
                    <li>
                        <p>
                            Criatividade: Celebramos a diversidade de expressão artística e valorizamos a originalidade em cada
                            peça que oferecemos.
                        </p>
                    </li>
                    <li>
                        <p>
                            Qualidade: Comprometemo-nos com a excelência em cada aspecto do processo de produção, garantindo
                            produtos que atendam aos mais altos padrões de qualidade.
                        </p>
                    </li>
                    <li>
                        <p>
                            Personalização: Valorizamos a individualidade de cada cliente e buscamos oferecer soluções
                            personalizadas que atendam às suas necessidades e gostos específicos.
                        </p>
                    </li>
                    <li>
                        <p>
                            Integridade: Agimos com honestidade, transparência e ética em todas as nossas relações comerciais e
                            operações.
                        </p>
                    </li>
                    <li>
                        <p>
                            Responsabilidade Social e Ambiental: Comprometemo-nos a operar de maneira sustentável, minimizando
                            nosso impacto ambiental e contribuindo positivamente para as comunidades em que atuamos.
                        </p>
                    </li>
                </ol>
                </p>
            </div>
        </div>
    </div>
@endsection
