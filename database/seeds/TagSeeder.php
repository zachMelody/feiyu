<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        $this->createTag('飞鱼', '飞鱼');
        $this->createTag('美食', '美食');
        $this->createTag('文件', '文件');
        $this->createTag('鲜花', '鲜花');
        $this->createTag('快递', '快递');
        $this->createTag('其他', '其他');
    }

    private function createTag($name, $slug)
    {
        factory(Tag::class)->create(compact('name', 'slug'));
    }
}
