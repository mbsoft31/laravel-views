<?php

use Mbsoft31\LaravelViews\Tests\Models\Post;

it('can test', function () {

    dd(Post::factory()->count(10)->create()->toArray());
    expect(true)->toBeTrue();
});
