<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use App\Models\PortfolioItem;

class PortfolioItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PortfolioItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        $categoryIds = [1, 2, 3, 4]; // Actual category IDs

        // Genera una imagen falsa usando Intervention\Image
        $image = Image::canvas(640, 480, '#ccc');
        $imagePath = storage_path('app/public/portfolio/') . 'portfolio__img' . $faker->unique()->numberBetween(1, 100) . '.jpg';
        $image->save($imagePath);

        // Almacena la imagen en la carpeta "public/portfolio" dentro de tu proyecto Laravel
        $imageFile = new UploadedFile($imagePath, 'portfolio__img.jpg', null, null, true);
        $imageFileName = 'portfolio__img' . $faker->unique()->numberBetween(1, 100) . '.jpg';
        Storage::disk('public')->putFileAs('portfolio', $imageFile, $imageFileName);

        return [
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'category_id' => $faker->randomElement($categoryIds),
            'image_path' => 'portfolio/' . $imageFileName, // Asigna la ruta de la imagen generada
        ];
    }
}

