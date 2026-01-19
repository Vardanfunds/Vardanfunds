#!/bin/bash
# ============================================
# VardanFunds - cPanel Deployment Script
# Run this script after Git pull on cPanel
# ============================================

echo "🚀 Starting deployment..."

# Navigate to project root
cd ~/public_html

# Create symbolic links for public assets
echo "📁 Creating symbolic links for assets..."

# Remove old symlinks or directories if they exist
rm -rf admin assets uploads 2>/dev/null

# Create new symlinks
ln -sf public/admin admin
ln -sf public/assets assets
ln -sf public/uploads uploads

echo "✅ Symlinks created successfully!"

# Set proper permissions
echo "🔐 Setting permissions..."
chmod -R 755 storage bootstrap/cache
chmod -R 755 public/admin public/assets public/uploads 2>/dev/null

# Clear Laravel cache
echo "🧹 Clearing Laravel cache..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Optimize for production
echo "⚡ Optimizing for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Deployment complete!"
echo ""
echo "Your site should now work correctly at: https://vardanfunds.com"
