<?php

class Milestone
{
    private string $year;
    private string $milestone;
    private string $details;
    private string $image;

    public function __construct($year = '', $milestone = '', $details = '', $image = '')
    {
        $this->year = $year;
        $this->milestone = $milestone;
        $this->details = $details;
        $this->image = $image;
    }

    public function __destruct(){}

    // Getters
    public function getYear(): string
    {
        return $this->year;
    }

    public function getMilestone(): string
    {
        return $this->milestone;
    }

    public function getDetails(): string
    {
        return $this->details;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    // Setters
    public function setYear($year): void
    {
        $this->year = $year;
    }

    public function setMilestone($milestone): void
    {
        $this->milestone = $milestone;
    }

    public function setDetails($details): void
    {
        $this->details = $details;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public static function showTable($milestones): void
    {
        foreach ($milestones as $milestone): ?>
					<tr>
						<td><strong><?php echo $milestone->getYear(); ?></strong></td>
						<td><strong><?php echo $milestone->getMilestone(); ?></strong></td>
						<td><?php echo $milestone->getDetails(); ?></td>
						<td><img src="<?php echo $milestone->getImage(); ?>" alt="Milestone Image"></td>
					</tr>
        <?php endforeach;
    }
}