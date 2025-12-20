#!/bin/bash
git status
git add .
git commit -m "Auto commit from CI/CD"
git push origin main
