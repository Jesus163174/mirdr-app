<div class="card card-small mb-3">
    <div class="card-body">
        <div class="form-group">
            <input type="text" required name="title" class="form-control form-control-lg mb-3"
                placeholder="Ingresa el titulo del evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="">Agrega una breve descripción del evento</label>
            <textarea required name="litleDescription" id="" cols="30" class="form-control form-control-lg mb-3"
                rows="10">{{$event->litleDescription}}</textarea>
        </div>

        <div class="form-group">
            <select name="day" required class="form-control form-control-lg mb-3" id="">
                <option value="{{$event->day}}" selected>
                    @if($event->day == null)
                        Selecciona el dia del evento
                    @else
                        {{$event->day}}
                    @endif
                </option>
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miercoles">Miercoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sabado">Sabado</option>
                <option value="Domingo">Domingo</option>
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-success">{{$button}}</button>
        </div>
    </div>
</div>