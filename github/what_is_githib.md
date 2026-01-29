# What is GitHub?

## Definition

**GitHub** is a cloud-based platform for hosting Git repositories that adds collaboration and project management features such as pull requests, code review, issues, CI/CD (Actions), releases, package hosting, and Pages for static sites.

## Key features

- **Repositories**: central storage for project code and history.
- **Pull Requests (PRs)**: propose changes, request review, and merge.
- **Issues**: track bugs, tasks, and feature requests.
- **Actions**: automate CI/CD workflows.
- **Forks**: copy a repository to contribute back via PRs.
- **Releases & Tags**: publish versioned artifacts and changelogs.
- **Pages**: host static websites from a repo branch.

## Common Git commands (with examples)

### Setup

- Configure identity:

```bash
git config --global user.name "Your Name"
git config --global user.email "you@example.com"
```

### Create / clone

- Initialize a new repo: `git init`
- Clone an existing repo:

```bash
git clone https://github.com/owner/repo.git
```

### Work with changes

- Show status: `git status`
- Stage files: `git add file.txt` or `git add .`
- Commit staged changes:

```bash
git commit -m "feat: short, meaningful message"
```

### Branching & switching

- List branches: `git branch`
- Create and switch: `git checkout -b feature-x` or `git switch -c feature-x`
- Switch branch: `git checkout main` or `git switch main`

### Sync with remote

- Add remote: `git remote add origin https://github.com/owner/repo.git`
- Fetch updates: `git fetch origin`
- Pull (fetch+merge): `git pull origin main`
- Push branch: `git push -u origin feature-x`

### Merging & rebasing

- Merge a branch into current: `git merge feature-x`
- Rebase onto another branch: `git rebase main`

### Undo / history

- View history: `git log --oneline --graph --decorate`
- Reset last commit (keep changes staged): `git reset --soft HEAD~1`
- Reset hard (discard working changes): `git reset --hard <commit>`
- Revert a commit (create a reversing commit): `git revert <commit>`

### Useful inspection commands

- See a commit: `git show <commit>`
- Diff changes: `git diff HEAD~1 HEAD`
- Stash work: `git stash` / `git stash pop`

## GitHub-specific workflows & features

- Typical open-source contribution flow: Fork → Clone → Branch → Commit → Push → Open Pull Request.
- Use the GitHub web UI to create PRs, assign reviewers, add labels, and run Actions checks.
- Protect important branches (e.g., `main`) with required reviews and passing CI.
- Create a `.github/workflows/ci.yml` to run tests/builds on push and PR events.
- Use Releases to attach binaries and publish release notes.

## Typical contribution workflow (commands)

```bash
git clone https://github.com/owner/repo.git
cd repo
git checkout -b feature/short-description
# make changes
git add .
git commit -m "feat: short summary of change"
git push -u origin feature/short-description
# then open a Pull Request on GitHub
```

## Quick tips

- Write clear, scoped commit messages (consider Conventional Commits).
- Rebase frequently (`git pull --rebase`) to reduce merge conflicts.
- Use PRs for code review and CI to catch regressions early.

---

If you want, I can add a one-page printable cheat sheet, an example `ci.yml` workflow, or tailor the commands to Windows/Git Bash/PowerShell. 

''' bash

    git init,
    git add,
    git commit -m '21-01-2026 all uploded'
    git remote add origin https://github.com/govindwork16-tech/tops_php_practice_2026.git
    git config --global user.name "Your Name"
    git config --global user.email "you@example.com"
    git push -u origin master