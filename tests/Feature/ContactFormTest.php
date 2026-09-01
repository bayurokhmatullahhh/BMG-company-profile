<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * Test successful contact form submission via AJAX.
     */
    public function test_contact_form_submission_success(): void
    {
        $payload = [
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'service' => 'event_production',
            'message' => 'Saya ingin memesan jasa event production untuk konser musik skala besar di Bandung.',
        ];

        $response = $this->postJson('/contact', $payload);

        $response->assertStatus(200)
                 ->assertJson([
                     'success' => true,
                     'message' => 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.',
                 ]);
    }

    /**
     * Test contact form validation fails when required fields are missing.
     */
    public function test_contact_form_requires_all_fields(): void
    {
        $response = $this->postJson('/contact', []);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['name', 'email', 'service', 'message']);
    }

    /**
     * Test contact form validation with invalid email format.
     */
    public function test_contact_form_validates_email_format(): void
    {
        $payload = [
            'name' => 'Budi Santoso',
            'email' => 'invalid-email-string',
            'service' => 'media_buying',
            'message' => 'Pesan pengujian untuk format email yang salah.',
        ];

        $response = $this->postJson('/contact', $payload);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['email']);
    }

    /**
     * Test contact form validation with invalid service type.
     */
    public function test_contact_form_validates_service_type(): void
    {
        $payload = [
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'service' => 'invalid_service_type',
            'message' => 'Pesan pengujian untuk jenis layanan yang tidak valid.',
        ];

        $response = $this->postJson('/contact', $payload);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['service']);
    }

    /**
     * Test contact form validation with short message.
     */
    public function test_contact_form_validates_message_minimum_length(): void
    {
        $payload = [
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'service' => 'digital_amplification',
            'message' => 'Short', // less than 10 chars
        ];

        $response = $this->postJson('/contact', $payload);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['message']);
    }
}
