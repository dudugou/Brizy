import Config from "visual/global/Config";

const WP = Config.get("wp") || {};
const translations = WP.l10n || {};

export const t = key => {
  if (process.env.NODE_ENV === "development") {
    if (translations[key] === undefined) {
      console.warn(`Translation not found for key "${key}"`);
    }
  }

  return translations[key] || key;
};
