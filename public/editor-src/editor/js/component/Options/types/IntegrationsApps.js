import React from "react";
import classnames from "classnames";
import EditorIcon from "visual/component/EditorIcon";
import UIState from "visual/global/UIState";

class IntegrationsAppsOptionType extends React.Component {
  static defaultProps = {
    className: "",
    attr: {},
    icon: "nc-cog",
    value: {}
  };

  handleMouseDown = event => {
    event.preventDefault();

    UIState.set("prompt", {
      prompt: "apps-integrations",
      value: this.props.value
    });
  };

  render() {
    const { className: _className, attr, icon } = this.props;
    const className = classnames(
      "brz-ed-option__button",
      _className,
      attr.className
    );

    return (
      <div {...attr} className={className} onMouseDown={this.handleMouseDown}>
        <EditorIcon icon={icon} />
      </div>
    );
  }
}

export default IntegrationsAppsOptionType;
