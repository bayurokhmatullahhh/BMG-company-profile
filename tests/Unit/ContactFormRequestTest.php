<?php

namespace Tests\Unit;

use App\Http\Requests\ContactFormRequest;
use Tests\TestCase;

class ContactFormRequestTest extends TestCase
{
    /**
     * Test that ContactFormRequest authorizes all users.
     */
    public function test_contact_form_request_is_authorized(): void
    {
        $request = new ContactFormRequest();
        $this->assertTrue($request->authorize());
    }

    /**
     * Test that ContactFormRequest has the expected validation rules.
     */
    public function test_contact_form_request_has_correct_rules(): void
    {
        $request = new ContactFormRequest();
        $rules = $request->rules();

        $this->assertArrayHasKey('name', $rules);
        $this->assertArrayHasKey('email', $rules);
        $this->assertArrayHasKey('service', $rules);
        $this->assertArrayHasKey('message', $rules);

        $this->assertContains('required', $rules['name']);
        $this->assertContains('email', $rules['email']);
        $this->assertContains('required', $rules['message']);
    }

    /**
     * Test custom error messages exist for form request.
     */
    public function test_contact_form_request_has_custom_messages(): void
    {
        $request = new ContactFormRequest();
        $messages = $request->messages();

        $this->assertArrayHasKey('name.required', $messages);
        $this->assertArrayHasKey('email.email', $messages);
        $this->assertArrayHasKey('service.required', $messages);
        $this->assertArrayHasKey('message.min', $messages);
    }
}
