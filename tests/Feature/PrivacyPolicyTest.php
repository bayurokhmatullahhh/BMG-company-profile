<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyPolicyTest extends TestCase
{
    /**
     * Test that the privacy policy page loads successfully.
     */
    public function test_privacy_policy_page_loads_successfully(): void
    {
        $response = $this->get(route('privacy'));

        $response->assertStatus(200);
        $response->assertSee('KEBIJAKAN PRIVASI');
        $response->assertSee('PT Berkah Media Gemilang');
        $response->assertSee('privacy@bmg.co.id');
        $response->assertSee('UU PDP No. 27/2022');
    }

    /**
     * Test that footer contains a working link to privacy policy.
     */
    public function test_footer_contains_privacy_policy_link(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(route('privacy'));
    }
}
