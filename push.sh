#!/bin/bash
# Script: push.sh
# Use: ./push.sh
#
#Define commit message
message=":sparkles: doc(new material): Adding or Updating materials for ads trail repository"
#
# Add all changes
git add .
#
# Committing with a predefined message
git commit -m "$message"
#
# Pushing all commits from local to remote
git push -u origin main
