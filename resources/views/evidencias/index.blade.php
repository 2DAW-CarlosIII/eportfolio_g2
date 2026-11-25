<div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1.5rem; width: 100%;">
    @foreach ($familiasProfesionales as $id => $familia)
        <x-familia-profesional-card :familia="$familia" :id="$id" />
    @endforeach
</div>
