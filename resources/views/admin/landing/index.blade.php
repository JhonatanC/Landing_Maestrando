@extends('admin.layout')

@section('content')

    <section class="row">
        <article class="large-3 medium-3 columns hide-for-small-only">
            <img src="" alt=""/>
        </article>
        <article class="small-12 large-9 medium-9 columns">
            <h1>
                {{ $page->title }}
            </h1>
            <p>
                {{ $page->description }}
            </p>

        </article>
    </section>

  <section class="row">
      <section class="small-12 medium-5 large-5 end columns">
          {!! Form::model(Request::all(),['route' => 'admin.landing.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
            <article class="small-12 medium-4 large-64 end columns">
                {!! Form::text('name', null, ['type' => 'text' , 'class' =>  'form-control', 'placeholder' => 'Buscar...'])!!}
            </article>
          <article class="small-12 medium-4 large-4 end columns">

          </article>
          <article class="small-12 medium-4 large-4 end columns">
              <button type="submit" class="btn btn-default">Buscar</button>
          </article>

          {!! Form::close() !!}
      </section>

      <article class="small-12 medium-12 large-12 columns">
              <table>
                  <tr>
                      <td>
                          id
                      </td>
                      <td>
                          Programa
                      </td>
                      <td>
                          Modalidad
                      </td>
                      <td>
                          Estado
                      </td>
                      <td>
                          Inicio Publicación
                      </td>
                      <td>
                          Fin de Publicación
                      </td>
                      <td>
                          Universidad
                      </td>
                  </tr>
                  @foreach ($programs as $program )
                  <tr>
                      <td>
                          {{ $program->id }}
                      </td>

                      <td>
                          {{ $program->nombre_programa }}
                      </td>
                      <td>
                          {{ $program->modalidad }}
                      </td>
                      <td>
                          @if ($program->estado == "1")
                              <a href="">
                                <span class="icon-check check-green" ></span>
                              </a>
                          @else
                              <a href="">
                                <span class="icon-check check-gray"></span>
                              </a>
                          @endif
                      </td>
                      <td>
                          {{ $program->inicio_publicacion }}
                      </td>
                      <td>
                          {{ $program->fin_publicacion }}
                      </td>
                      <td>
                          {{ $program->university_details->nombre }}
                      </td>
                  </tr>
                  @endforeach
              </table>
            </article>
  </section>
@endsection