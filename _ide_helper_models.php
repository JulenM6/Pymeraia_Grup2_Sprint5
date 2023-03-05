<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Activity
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $start_date
 * @property string $final_date
 * @property int $category_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $categories
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Delivery> $deliveries
 * @property-read int|null $deliveries_count
 * @method static \Database\Factories\ActivityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereFinalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Activity whereUpdatedAt($value)
 */
	class Activity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Answer
 *
 * @property int $id
 * @property string $name
 * @property string $recommendation
 * @property int $risk_id
 * @property int $intervention_id
 * @property int $type_measure_id
 * @property int $probability_id
 * @property int $impact_id
 * @property int $question_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Impact $impact
 * @property-read \App\Models\Intervention $intervention
 * @property-read \App\Models\Probability $probability
 * @property-read \App\Models\Question $question
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $reports
 * @property-read int|null $reports_count
 * @property-read \App\Models\Risk $risk
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Task> $tasks
 * @property-read int|null $tasks_count
 * @property-read \App\Models\TypeMeasure $typeMeasure
 * @method static \Database\Factories\AnswerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereImpactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereInterventionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereProbabilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereRecommendation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereRiskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereTypeMeasureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereUpdatedAt($value)
 */
	class Answer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AnswerReport
 *
 * @property int $id
 * @property string $hidden
 * @property int $answer_id
 * @property int $report_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Answer|null $answers
 * @property-read \App\Models\Report|null $reports
 * @method static \Database\Factories\AnswerReportFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport whereReportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnswerReport whereUpdatedAt($value)
 */
	class AnswerReport extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Budget
 *
 * @property int $id
 * @property float|null $price
 * @property string|null $accepted
 * @property string|null $hidden
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Task> $tasks
 * @property-read int|null $tasks_count
 * @method static \Database\Factories\BudgetFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Budget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget query()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereAccepted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereUpdatedAt($value)
 */
	class Budget extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property int $course_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Course|null $courses
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ResourceFile> $resource_files
 * @property-read int|null $resource_files_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ResourceText> $resource_texts
 * @property-read int|null $resource_texts_count
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $cif
 * @property string|null $logo
 * @property string|null $hidden
 * @property string|null $removed_reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\CompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereRemovedReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Course
 *
 * @property int $id
 * @property string|null $name
 * @property string $description
 * @property string|null $image
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Emblem> $emblems
 * @property-read int|null $emblems_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Rating> $ratings
 * @property-read int|null $ratings_count
 * @method static \Database\Factories\CourseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CourseUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CourseUserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CourseUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseUser whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseUser whereUserId($value)
 */
	class CourseUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Delivery
 *
 * @property int $id
 * @property string $locate
 * @property string $grade
 * @property string $feedback
 * @property int $activity_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Activity|null $activities
 * @property-read \App\Models\User|null $users
 * @method static \Database\Factories\DeliveryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereLocate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUserId($value)
 */
	class Delivery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Device
 *
 * @property int $id
 * @property string $brand
 * @property string $model
 * @property string|null $mac_ethernet
 * @property string|null $mac_wifi
 * @property string|null $description
 * @property string|null $state
 * @property string|null $tag
 * @property string $serial_number
 * @property int $type_device_id
 * @property int $user_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TypeDevice $type
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\DeviceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Device newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device query()
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereMacEthernet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereMacWifi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereTypeDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUserId($value)
 */
	class Device extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Emblem
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $course_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course|null $courses
 * @method static \Database\Factories\EmblemFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emblem whereUpdatedAt($value)
 */
	class Emblem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ImageDevice
 *
 * @property int $id
 * @property string $location
 * @property int $device_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Database\Factories\ImageDeviceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageDevice whereUpdatedAt($value)
 */
	class ImageDevice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Impact
 *
 * @property int $id
 * @property string $name
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Task> $tasks
 * @property-read int|null $tasks_count
 * @method static \Database\Factories\ImpactFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Impact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Impact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Impact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Impact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Impact whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Impact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Impact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Impact whereUpdatedAt($value)
 */
	class Impact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Intervention
 *
 * @property int $id
 * @property string $name
 * @property string $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @method static \Database\Factories\InterventionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Intervention newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Intervention newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Intervention query()
 * @method static \Illuminate\Database\Eloquent\Builder|Intervention whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Intervention whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Intervention whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Intervention whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Intervention whereUpdatedAt($value)
 */
	class Intervention extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Options
 *
 * @property int $id
 * @property string $description
 * @property string $terms
 * @property string $privacy_policy
 * @property string $cookies_policy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Options newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Options newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Options query()
 * @method static \Illuminate\Database\Eloquent\Builder|Options whereCookiesPolicy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Options whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Options whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Options whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Options wherePrivacyPolicy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Options whereTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Options whereUpdatedAt($value)
 */
	class Options extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Probability
 *
 * @property int $id
 * @property string $name
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @method static \Database\Factories\ProbabilityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Probability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Probability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Probability query()
 * @method static \Illuminate\Database\Eloquent\Builder|Probability whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Probability whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Probability whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Probability whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Probability whereUpdatedAt($value)
 */
	class Probability extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Question
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Questionnaire> $questionnaires
 * @property-read int|null $questionnaires_count
 * @method static \Database\Factories\QuestionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuestionQuestionnaire
 *
 * @property int $id
 * @property int $question_id
 * @property int $questionnaire_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Questionnaire|null $questionnaires
 * @property-read \App\Models\Question|null $questions
 * @method static \Database\Factories\QuestionQuestionnaireFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionQuestionnaire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionQuestionnaire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionQuestionnaire query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionQuestionnaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionQuestionnaire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionQuestionnaire whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionQuestionnaire whereQuestionnaireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuestionQuestionnaire whereUpdatedAt($value)
 */
	class QuestionQuestionnaire extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Questionnaire
 *
 * @property int $id
 * @property string $name
 * @property string|null $autor
 * @property string $date
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $reports
 * @property-read int|null $reports_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Task> $tasks
 * @property-read int|null $tasks_count
 * @method static \Database\Factories\QuestionnaireFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire query()
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereAutor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questionnaire whereUpdatedAt($value)
 */
	class Questionnaire extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Rating
 *
 * @property int $id
 * @property string $rating
 * @property string $feedback
 * @property int $course_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course|null $courses
 * @method static \Database\Factories\RatingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereUpdatedAt($value)
 */
	class Rating extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Report
 *
 * @property int $id
 * @property string $name
 * @property string|null $status
 * @property int $questionnaire_id
 * @property int $user_id
 * @property string $date
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @property-read \App\Models\Questionnaire $questionnaire
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\ReportFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereQuestionnaireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Report whereUserId($value)
 */
	class Report extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ResourceFile
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property int $category_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $categories
 * @method static \Database\Factories\ResourceFileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceFile whereUpdatedAt($value)
 */
	class ResourceFile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ResourceText
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $category_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $categories
 * @method static \Database\Factories\ResourceTextFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceText whereUpdatedAt($value)
 */
	class ResourceText extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ResourceURL
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property int $category_id
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $categories
 * @method static \Database\Factories\ResourceURLFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResourceURL whereUpdatedAt($value)
 */
	class ResourceURL extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Risk
 *
 * @property int $id
 * @property string $name
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @method static \Database\Factories\RiskFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Risk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Risk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Risk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Risk whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Risk whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Risk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Risk whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Risk whereUpdatedAt($value)
 */
	class Risk extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Task
 *
 * @property int $id
 * @property string|null $state
 * @property string|null $start_date
 * @property string|null $final_date
 * @property float|null $price
 * @property string|null $manages
 * @property int $user_id
 * @property int $questionnaire_id
 * @property int $answer_id
 * @property int $budget_id
 * @property int $impact_id
 * @property int|null $percentage
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Answer|null $answers
 * @property-read \App\Models\Budget|null $budgets
 * @property-read \App\Models\Impact|null $impacts
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Questionnaire|null $questionnaires
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\User|null $users
 * @method static \Database\Factories\TaskFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereFinalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereImpactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereManages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereQuestionnaireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUserId($value)
 */
	class Task extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeDevice
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Device> $devices
 * @property-read int|null $devices_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeDevice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeDevice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeDevice query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeDevice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeDevice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeDevice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeDevice whereUpdatedAt($value)
 */
	class TypeDevice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeMeasure
 *
 * @property int $id
 * @property string $name
 * @property string|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @method static \Database\Factories\TypeMeasureFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMeasure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMeasure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMeasure query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMeasure whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMeasure whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMeasure whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMeasure whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeMeasure whereUpdatedAt($value)
 */
	class TypeMeasure extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $phone
 * @property string $nick_name
 * @property string|null $profile_image
 * @property string $type
 * @property string|null $hidden
 * @property string|null $removed_reason
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $company_id
 * @property-read \App\Models\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Course> $courses
 * @property-read int|null $courses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Delivery> $deliveries
 * @property-read int|null $deliveries_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Device> $devices
 * @property-read int|null $devices_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Report> $reports
 * @property-read int|null $reports_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Task> $tasks
 * @property-read int|null $tasks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNickName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfileImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRemovedReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

