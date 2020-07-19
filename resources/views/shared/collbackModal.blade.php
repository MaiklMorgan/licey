<div class="modal fade" id="collbackModal" tabindex="-1" role="dialog" aria-labelledby="collbackModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <div class="fz-xxxlarger fw-medium text-condenced-one">Как с вами связаться?</div>
        <div class="fz-base fw-regular lh-medium_ ff-alt">Заполните форму - мы перезвоним в <br />ближайшее время.</div>
        <form action="{{ route('form.callback') }}" method="POST" class="form form-validate offset-top--xlarge offset-top--xs-medium offset-bottom--xs-medium">
          {{ csrf_field() }}
          <div class="form__content">
            <div class="box__part">
              <div class="form-group form-group--offset-large">
                <div class="offset-bottom--small">
                  

                  <div class="form-group">
                    <div class="input-animated">
                      <input type="text" name="name" id="callback2-section-name" placeholder="Ваше имя" data-bv-notempty="true" data-bv-notempty-message="@lang('Ваше имя')" />
                    </div>
                  </div>

                  <div class="offset-bottom--default">
                    <div class="form-group">
                      <div class="input-animated">
                        
                        <input type="tel" name="phone" id="callback2-section-phone"
                          placeholder="Ваш номер телефона" 
                          data-bv-notempty="true" 
                          data-bv-notempty-message="@lang('Ваш номер телефона')" 
                          data-bv-regexp="/^([0-9\(\)\/\+ \-]*)$/"
                          data-bv-regexp-message="@lang('Неверный формат')" />
                      </div>
                    </div>
                  </div>

                  <div class="offset-bottom--xlarge">
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btnSubmit" style="width: 100%;" data-loading-text="<i class='fa fa-spinner fa-pulse fa-fw'></i> @lang('отправить заявку')">@lang('отправить заявку')</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="form__message text-center">
            <div class="box__part box__part--mediumer color-theme">
              <i class="fa fa-check fa-10x" area-hidden="true"></i>
            </div>

            <div class="box__part box__header">
              <h3>@lang('Спасибо!')</h3>
            </div>

            <div class="box__part">
              <p>@lang('Мы свяжемся с&nbsp;вами в&nbsp;ближайшее время')</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>