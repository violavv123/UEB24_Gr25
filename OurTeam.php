<?php

class OurTeam
{
    private string $name;
    private string $role;
    private string $image;
    private string $description;

    public function __construct($name = '', $role = '', $image = '', $description = '')
    {
        $this->name = $name;
        $this->role = $role;
        $this->image = $image;
        $this->description = $description;
    }

    public function __destruct()
    {
    }

    // Getters
    public function getName(): string
    {
        return $this->name;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    // Setters
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public static function showTeam($teamMembers): void
    {
        foreach ($teamMembers as $member): ?>
					<div class="team-member">
						<div class="team-card">
							<div class="team-card-front">
								<img src="<?php echo $member->getImage(); ?>" alt="<?php echo $member->getName(); ?>">
								<h3><?php echo $member->getName(); ?></h3>
								<p><?php echo $member->getRole(); ?></p>
							</div>
							<div class="team-card-back">
								<p><?php echo $member->getDescription(); ?></p>
							</div>
						</div>
					</div>
        <?php endforeach;
    }
}