import { test, expect } from '@playwright/test';

test('product filter loads', async ({ page }) => {
  await page.goto('/');
  await expect(page.locator('#product-filter-root')).toBeVisible();
});
