

    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                {{--  <div class="header header-primary text-center">
                                    <h4>Sign Up</h4>
                                    <div class="social-line">
                                        <a href="{{ route('provider', 'facebook') }}" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="{{ route('provider', 'google') }}" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>  --}}
                                {{--  <p class="text-divider">Or Be Classical</p>  --}}
                                <div class="content">

                                    <div class="input-group">
										<span class="input-group-addon">
											{{--  <i class="material-icons">face</i>  --}}
										</span>
                                        <div class="form-group label-floating {{ $errors->has('cursonombre') ? ' has-error' : '' }}">
                                            @if ($errors->has('cursonombre'))
                                            <label class="control-label">{{ $errors->first('cursonombre') }}</label>
                                            @endif
                                            <input id="cursonombre" placeholder="Ingrese numero del curso" type="text" class="form-control" name="cursonombre" value="{{ old('cursonombre') }}" required autofocus>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
										<span class="input-group-addon">
											{{--  <i class="material-icons">person</i>  --}}
										</span>
                                        <div class="form-group label-floating {{ $errors->has('cursodescripcion') ? ' has-error' : '' }}">
                                            @if ($errors->has('crusodescripcion'))
                                                <label class="control-label">{{ $errors->first('cursodescripcion') }}</label>
                                            @endif
                                            <input id="cursodescripcion" placeholder="Ingrese descripcion del Curso" type="text" class="form-control" name="cursodescripcion" value="{{ old('cursodescripcion') }}" required>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
										<span class="input-group-addon">
											{{--  <i class="material-icons">mail_outline</i>  --}}
										</span>
                                        <div class="form-group label-floating {{ $errors->has('cursonumerohoras') ? ' has-error' : '' }}">
                                            @if ($errors->has('cursonumerohoras'))
                                                <label class="control-label">{{ $errors->first('cursonumerohoras') }}</label>
                                            @endif
                                            <input id="cursonumerohoras" placeholder="Ingrese numero de Horas" type="text" class="form-control" name="cursonumerohoras" value="{{ old('cursonumerohoras') }}" required>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                    

                                    <!-- If you want to add a checkbox to this form, uncomment this code

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked>
                                            Subscribe to newsletter
                                        </label>
                                    </div> -->
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-simple btn-primary btn-lg">Get Started</button>
                                </div>
                </form>
