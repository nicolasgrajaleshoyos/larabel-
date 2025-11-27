<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'Desarrollador Full Stack',
            'Ingeniero de Datos',
            'Diseñador UX/UI',
            'Desarrollador Backend Senior',
            'Desarrollador Frontend',
            'Analista de Seguridad Informática',
            'Desarrollador Mobile (iOS/Android)',
            'DevOps Engineer',
            'Product Manager',
            'Arquitecto de Software',
            'QA Engineer',
            'Scrum Master',
            'Data Scientist',
            'Ingeniero de Machine Learning',
            'Administrador de Bases de Datos',
        ];

        $companies = [
            'Tech Solutions',
            'DataCorp',
            'Creative Minds',
            'Cloud Innovations',
            'SecureNet',
            'AppMakers',
            'Infrastructure Pro',
            'StartupHub',
            'Digital Ventures',
            'CodeFactory',
            'Innovation Labs',
            'Smart Systems',
        ];

        $cities = [
            'Bogotá, Colombia',
            'Medellín, Colombia',
            'Cali, Colombia',
            'Barranquilla, Colombia',
            'Cartagena, Colombia',
            'Bucaramanga, Colombia',
            'Pereira, Colombia',
            'Remoto',
        ];

        $descriptions = [
            'Buscamos un profesional con experiencia en desarrollo de aplicaciones web. Responsabilidades incluyen desarrollo de nuevas funcionalidades, mantenimiento de código existente, y colaboración con el equipo.',
            'Se requiere experiencia en tecnologías modernas y metodologías ágiles. El candidato ideal debe tener habilidades de comunicación y trabajo en equipo.',
            'Estamos en busca de talento para unirse a nuestro equipo dinámico. Ofrecemos un ambiente de trabajo colaborativo y oportunidades de crecimiento profesional.',
            'Profesional con sólidos conocimientos técnicos y pasión por la tecnología. Deberás trabajar en proyectos desafiantes y de alto impacto.',
            'Buscamos alguien con experiencia comprobada y capacidad para resolver problemas complejos. Ofrecemos beneficios competitivos y flexibilidad laboral.',
        ];

        return [
            'company_id' => Employer::factory(),
            'title' => fake()->randomElement($titles),
            'company' => fake()->randomElement($companies),
            'location' => fake()->randomElement($cities),
            'description' => fake()->randomElement($descriptions),
            'salary' => fake()->numberBetween(2500, 5000) . ' USD mensuales',
        ];
    }
}
