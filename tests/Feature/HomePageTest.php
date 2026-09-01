<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * Test that the homepage loads successfully and contains key company profile sections.
     */
    public function test_homepage_loads_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Berkah Media Gemilang');
        $response->assertSee('Precision Media. Raw Energy.');
    }

    /**
     * Test that the homepage contains all expected navigation links.
     */
    public function test_homepage_contains_navigation_links(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Home');
        $response->assertSee('Layanan');
        $response->assertSee('Tentang');
        $response->assertSee('Portofolio');
        $response->assertSee('Contact Us');
    }

    /**
     * Test that the homepage renders the Services section correctly.
     */
    public function test_services_section_is_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Layanan Kami');
        $response->assertSee('Media Buying');
        $response->assertSee('Event Production');
        $response->assertSee('Digital Reach');
    }

    /**
     * Test that the homepage renders the Featured Portfolio section.
     */
    public function test_portfolio_section_is_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Portofolio');
        $response->assertSee('Bandung');
        $response->assertSee('Festival');
        $response->assertSee('Featured Project');
    }

    /**
     * Test that the homepage renders the About Us values.
     */
    public function test_about_section_values_are_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Tentang Kami');
        $response->assertSee('Precision');
        $response->assertSee('Energy');
        $response->assertSee('Expert UI/UX');
        $response->assertSee('Partnership');
    }

    /**
     * Test that the Contact Us section form exists.
     */
    public function test_contact_form_is_rendered(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Mulai Kolaborasi');
        $response->assertSee('Nama Lengkap');
        $response->assertSee('Email');
        $response->assertSee('Layanan yang Dibutuhkan');
        $response->assertSee('Pesan');
    }
}
