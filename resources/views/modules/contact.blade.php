<div id="contactForm">
    <form class="form contactForm" method="POST" action="/contact-us/new">
            <div class="formElement">
                <span class="label">
                    Name
                </span>
                <input name="customer_name" type="text" value="{{ old('customer_name') }}" />
            </div>
            <div class="formElement">
                @foreach ($errors->get('customer_contact') as $customer_contact_message)
                    @if(count($customer_contact_message))
                        <div class="errorMsg">
                            {{ $customer_contact_message }}
                        </div>
                    @endif
                @endforeach
                <span class="label">
                    Email or phone
                </span>
                <input name="customer_contact" type="text" value="{{ old('customer_contact') }}" />
            </div>
            <div class="formElement">
                @foreach ($errors->get('customer_message') as $customer_message_message)
                    @if(count($customer_message_message))
                        <div class="errorMsg">
                            {{ $customer_message_message }}
                        </div>
                    @endif
                @endforeach
                <span class="label">
                    Message
                </span>
                <textarea name="customer_message" >{{ old('customer_message') }}</textarea>
            </div>
            <div class="formElement">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <button type="submit" class="btn submitButton">
                    Submit             
                </button>
            </div>
    </form>
</div>