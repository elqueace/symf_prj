<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProposalCommentRepository")
 */
class ProposalComment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $comment_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $proposal_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentId(): ?int
    {
        return $this->comment_id;
    }

    public function setCommentId(int $comment_id): self
    {
        $this->comment_id = $comment_id;

        return $this;
    }

    public function getProposalId(): ?int
    {
        return $this->proposal_id;
    }

    public function setProposalId(int $proposal_id): self
    {
        $this->proposal_id = $proposal_id;

        return $this;
    }
}
